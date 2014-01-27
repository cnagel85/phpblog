<?php
class BlogPost
{
	public $id;
	public $title;
	public $post;
	public $author;
	public $authorEmail;
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
	}
}
?>