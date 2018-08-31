TYPE=VIEW
query=select `working_ts`.`tbl_product`.`product_id` AS `product_id`,`working_ts`.`tbl_product`.`product_type` AS `product_type`,`working_ts`.`tbl_product`.`product_group` AS `product_group`,`working_ts`.`tbl_product`.`product_name` AS `product_name`,`working_ts`.`stock`.`stock` AS `stock` from (`working_ts`.`tbl_product` join `working_ts`.`stock` on((`working_ts`.`tbl_product`.`product_id` = `working_ts`.`stock`.`product_id`)))
md5=80521074b7442cb1de3e07f47ea40812
updatable=1
algorithm=0
definer_user=dteservicebd
definer_host=localhost
suid=1
with_check_option=0
timestamp=2018-07-04 21:40:03
create-version=2
source=select `tbl_product`.`product_id` AS `product_id`,`tbl_product`.`product_type` AS `product_type`,`tbl_product`.`product_group` AS `product_group`,`tbl_product`.`product_name` AS `product_name`,`stock`.`stock` AS `stock` from (`tbl_product` join `stock` on((`tbl_product`.`product_id` = `stock`.`product_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `working_ts`.`tbl_product`.`product_id` AS `product_id`,`working_ts`.`tbl_product`.`product_type` AS `product_type`,`working_ts`.`tbl_product`.`product_group` AS `product_group`,`working_ts`.`tbl_product`.`product_name` AS `product_name`,`working_ts`.`stock`.`stock` AS `stock` from (`working_ts`.`tbl_product` join `working_ts`.`stock` on((`working_ts`.`tbl_product`.`product_id` = `working_ts`.`stock`.`product_id`)))
mariadb-version=100131
