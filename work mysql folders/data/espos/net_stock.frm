TYPE=VIEW
query=select `espos`.`tbl_product`.`product_id` AS `product_id`,`espos`.`tbl_product`.`product_type` AS `product_type`,`espos`.`tbl_product`.`product_group` AS `product_group`,`espos`.`tbl_product`.`product_name` AS `product_name`,`espos`.`stock`.`stock` AS `stock` from (`espos`.`tbl_product` join `espos`.`stock` on((convert(`espos`.`tbl_product`.`product_id` using utf8) = convert(`espos`.`stock`.`product_id` using utf8))))
md5=97d8282d968e30ba9b17038682ba56bc
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-08-09 18:24:00
create-version=2
source=select `tbl_product`.`product_id` AS `product_id`,`tbl_product`.`product_type` AS `product_type`,`tbl_product`.`product_group` AS `product_group`,`tbl_product`.`product_name` AS `product_name`,`stock`.`stock` AS `stock` from (`tbl_product` join `stock` on((convert(`tbl_product`.`product_id` using utf8) = convert(`stock`.`product_id` using utf8))))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `espos`.`tbl_product`.`product_id` AS `product_id`,`espos`.`tbl_product`.`product_type` AS `product_type`,`espos`.`tbl_product`.`product_group` AS `product_group`,`espos`.`tbl_product`.`product_name` AS `product_name`,`espos`.`stock`.`stock` AS `stock` from (`espos`.`tbl_product` join `espos`.`stock` on((convert(`espos`.`tbl_product`.`product_id` using utf8) = convert(`espos`.`stock`.`product_id` using utf8))))
mariadb-version=100131
