TYPE=VIEW
query=select `update_ts`.`tbl_product`.`product_id` AS `product_id`,`update_ts`.`tbl_product`.`product_type` AS `product_type`,`update_ts`.`tbl_product`.`product_group` AS `product_group`,`update_ts`.`tbl_product`.`product_name` AS `product_name`,`update_ts`.`stock`.`stock` AS `stock` from (`update_ts`.`tbl_product` join `update_ts`.`stock` on((`update_ts`.`tbl_product`.`product_id` = `update_ts`.`stock`.`product_id`)))
md5=c2fb0878a0b6c889da738ee9e8a6fa7c
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-06-05 19:01:27
create-version=2
source=select `tbl_product`.`product_id` AS `product_id`,`tbl_product`.`product_type` AS `product_type`,`tbl_product`.`product_group` AS `product_group`,`tbl_product`.`product_name` AS `product_name`,`stock`.`stock` AS `stock` from (`tbl_product` join `stock` on((`tbl_product`.`product_id` = `stock`.`product_id`)))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `update_ts`.`tbl_product`.`product_id` AS `product_id`,`update_ts`.`tbl_product`.`product_type` AS `product_type`,`update_ts`.`tbl_product`.`product_group` AS `product_group`,`update_ts`.`tbl_product`.`product_name` AS `product_name`,`update_ts`.`stock`.`stock` AS `stock` from (`update_ts`.`tbl_product` join `update_ts`.`stock` on((`update_ts`.`tbl_product`.`product_id` = `update_ts`.`stock`.`product_id`)))
mariadb-version=100131
