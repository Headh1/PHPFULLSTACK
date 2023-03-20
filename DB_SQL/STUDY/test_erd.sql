CREATE TABLE `members` (
	`mem_no`	int(11)	NOT NULL	COMMENT 'pk',
	`mem_id`	varchar(20)	NOT NULL	COMMENT 'uk',
	`fullname`	varchar(30)	NOT NULL,
	`mem_addr`	varchar(100)	NOT NULL
);

CREATE TABLE `product` (
	`prod_no`	int(20)	NOT NULL	COMMENT 'pk',
	`prod_price`	int(10)	NOT NULL,
	`prod_name`	varchar(100)	NOT NULL
);

CREATE TABLE `order` (
	`ord_no`	int(20)	NOT NULL	COMMENT 'pk',
	`prod_no`	int(20)	NOT NULL	COMMENT 'fk',
	`mem_no`	int(11)	NOT NULL	COMMENT 'fk',
	`ord_dlvy`	enum('배송전','배송중','배송완료')	NOT NULL
);

CREATE TABLE `point` (
	`mem_no`	int(11)	NOT NULL	COMMENT 'pk ,fk',
	`po`	int(100)	NOT NULL	COMMENT 'defalt(0)'
);

ALTER TABLE `members` ADD CONSTRAINT `PK_MEMBERS` PRIMARY KEY (
	`mem_no`
);

ALTER TABLE `product` ADD CONSTRAINT `PK_PRODUCT` PRIMARY KEY (
	`prod_no`
);

ALTER TABLE `order` ADD CONSTRAINT `PK_ORDER` PRIMARY KEY (
	`ord_no`
);

ALTER TABLE `point` ADD CONSTRAINT `PK_POINT` PRIMARY KEY (
	`mem_no`
);

ALTER TABLE `point` ADD CONSTRAINT `FK_members_TO_point_1` FOREIGN KEY (
	`mem_no`
)
REFERENCES `members` (
	`mem_no`
);

