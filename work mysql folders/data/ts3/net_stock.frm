TYPE=VIEW
query=select `ts3`.`tbl_product`.`product_id` AS `product_id`,`ts3`.`tbl_product`.`product_type` AS `product_type`,`ts3`.`tbl_product`.`product_group` AS `product_group`,`ts3`.`tbl_product`.`product_name` AS `product_name`,`ts3`.`stock`.`stock` AS `stock` from (`ts3`.`tbl_product` join `ts3`.`stock` on((`ts3`.`tbl_product`.`product_id` = `ts3`.`stock`.`product_id`)))
md5=bebc082de25d3efc8c0f8095eb8f23f9
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-05-07 20:06:01
create-version=2
source=select `tbl_product`.`product_id` AS `product_id`,`tbl_product`.`product_type` AS `product_type`,`tbl_product`.`product_group` AS `product_group`,`tbl_product`.`product_name` AS `product_name`,`stock`.`stock` AS `stock` from (`tbl_product` join `stock` on((`tbl_product`.`product_id` = `stock`.`product_id`)))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `ts3`.`tbl_product`.`product_id` AS `product_id`,`ts3`.`tbl_product`.`product_type` AS `product_type`,`ts3`.`tbl_product`.`product_group` AS `product_group`,`ts3`.`tbl_product`.`product_name` AS `product_name`,`ts3`.`stock`.`stock` AS `stock` from (`ts3`.`tbl_product` join `ts3`.`stock` on((`ts3`.`tbl_product`.`product_id` = `ts3`.`stock`.`product_id`)))
mariadb-version=100131
