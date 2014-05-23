CREATE TABLE 'poll' (
'id' int(11) NOT NULL auto_increment,
'yes' int(11) NOT NULL default '0',
'no' int(11) NOT NULL default '0',
PRIMARY KEY ('id')
)ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

INSERT INTO 'poll' VALUES(1,0,0);