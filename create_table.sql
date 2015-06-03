CREATE TABLE blog_text(
  `text_id` INT AUTO_INCREMENT,
  `title` VARCHAR(50) NOT NULL,
  `content` VARCHAR(1000) NOT NULL,
  `create_date` datetime,
  PRIMARY KEY(`text_id`)
)charset = utf8;