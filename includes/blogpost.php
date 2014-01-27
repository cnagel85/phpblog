<?php
class BlogPost
{
	public $id;
	public $title;
	public $post;
	public $author;
	public $authorEmail;
	public $tags;
	public $DatePosted;

	function __construct($id=null, $title=null, $post=null, $authorId=null, $datePosted=null)
	{
		if (!empty($id)) 
			$this->id = $id;
		if (!empty($title)) 
			$this->title = $title;
		if (!empty($post))
			$this->post = $post;

		if (!empty($datePosted)) {	
			$splitDate = explode("-", $datePosted);
			$this->datePosted = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
		}

		if (!empty($authorId)) {
			$query = mysql_query("SELECT first_name, last_name, email FROM people WHERE id = " . $authorId);
			$row = mysql_fetch_assoc($query);
			$this->author = $row["first_name"] . " " . $row["last_name"];
			$this->authorEmail = $row["email"];
		}

		$postTags = "No Tags";
		if(!empty($id)) {
			$query = mysql_query("SELECT * FROM blog_post_tags LEFT JOIN (tags) ON (blog_post_tags.tag_id = tags.id) WHERE blog_post_tags.blog_post_id = " . $id);
			$tagArray = array();
			$tagIDArray = array();
			while($row = mysql_fetch_assoc($query)) {
				array_push($tagArray, $row["name"]);
				array_push($tagIDArray, $row["id"]);
			}
			if (sizeof($tagArray) > 0) {
				foreach($tagArray as $tag) {
					if ($postTags == "No Tags") {
						$postTags = $tag;
					} else {
					$post_Tags = $postTags . ", " . $tag;
					}
				}
			}
		}
		$this->tags = $postTags;
	}
}
?>