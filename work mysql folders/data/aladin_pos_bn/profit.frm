TYPE=VIEW
query=select `pr`.`date` AS `date`,`pr`.`sell_id` AS `sell_id`,`pr`.`customer_name` AS `customer_name`,`pr`.`product_id` AS `product_id`,`tu`.`name` AS `name`,((`pr`.`unit_price` * `pr`.`quantity`) - (`pr`.`purchase_price` * `pr`.`quantity`)) AS `profit` from (`aladin_pos_bn`.`profit_report` `pr` join `aladin_pos_bn`.`tbl_user` `tu` on((`pr`.`seller` = `tu`.`userid`))) group by `pr`.`sell_id`
md5=a95fcb7cf281b260b53f7854bf9eddce
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-28 20:08:32
create-version=2
source=select `pr`.`date` AS `date`,`pr`.`sell_id` AS `sell_id`,`pr`.`customer_name` AS `customer_name`,`pr`.`product_id` AS `product_id`,`tu`.`name` AS `name`,((`pr`.`unit_price` * `pr`.`quantity`) - (`pr`.`purchase_price` * `pr`.`quantity`)) AS `profit` from (`profit_report` `pr` join `tbl_user` `tu` on((`pr`.`seller` = `tu`.`userid`))) group by `pr`.`sell_id`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `pr`.`date` AS `date`,`pr`.`sell_id` AS `sell_id`,`pr`.`customer_name` AS `customer_name`,`pr`.`product_id` AS `product_id`,`tu`.`name` AS `name`,((`pr`.`unit_price` * `pr`.`quantity`) - (`pr`.`purchase_price` * `pr`.`quantity`)) AS `profit` from (`aladin_pos_bn`.`profit_report` `pr` join `aladin_pos_bn`.`tbl_user` `tu` on((`pr`.`seller` = `tu`.`userid`))) group by `pr`.`sell_id`
mariadb-version=100131
