TYPE=VIEW
query=select `aladin_pos_bn`.`tbl_product`.`product_id` AS `product_id`,`aladin_pos_bn`.`tbl_product`.`product_type` AS `product_type`,`aladin_pos_bn`.`tbl_product`.`product_group` AS `product_group`,`aladin_pos_bn`.`tbl_product`.`product_name` AS `product_name`,`aladin_pos_bn`.`stock`.`stock` AS `stock` from (`aladin_pos_bn`.`tbl_product` join `aladin_pos_bn`.`stock` on((convert(`aladin_pos_bn`.`tbl_product`.`product_id` using utf8) = convert(`aladin_pos_bn`.`stock`.`product_id` using utf8))))
md5=55667f4498ebdd30b6d0f6e9711febe0
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-28 20:08:31
create-version=2
source=select `tbl_product`.`product_id` AS `product_id`,`tbl_product`.`product_type` AS `product_type`,`tbl_product`.`product_group` AS `product_group`,`tbl_product`.`product_name` AS `product_name`,`stock`.`stock` AS `stock` from (`tbl_product` join `stock` on((convert(`tbl_product`.`product_id` using utf8) = convert(`stock`.`product_id` using utf8))))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `aladin_pos_bn`.`tbl_product`.`product_id` AS `product_id`,`aladin_pos_bn`.`tbl_product`.`product_type` AS `product_type`,`aladin_pos_bn`.`tbl_product`.`product_group` AS `product_group`,`aladin_pos_bn`.`tbl_product`.`product_name` AS `product_name`,`aladin_pos_bn`.`stock`.`stock` AS `stock` from (`aladin_pos_bn`.`tbl_product` join `aladin_pos_bn`.`stock` on((convert(`aladin_pos_bn`.`tbl_product`.`product_id` using utf8) = convert(`aladin_pos_bn`.`stock`.`product_id` using utf8))))
mariadb-version=100131
