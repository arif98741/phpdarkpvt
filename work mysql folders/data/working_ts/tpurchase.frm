TYPE=VIEW
query=select `working_ts`.`tbl_invoice_products`.`product_id` AS `product_id`,sum(`working_ts`.`tbl_invoice_products`.`quantity`) AS `pquantity` from `working_ts`.`tbl_invoice_products` group by `working_ts`.`tbl_invoice_products`.`product_id`
md5=1ef18e30b01e67c28e92239fe99cda0f
updatable=0
algorithm=0
definer_user=dteservicebd
definer_host=localhost
suid=1
with_check_option=0
timestamp=2018-07-04 21:40:03
create-version=2
source=select `tbl_invoice_products`.`product_id` AS `product_id`,sum(`tbl_invoice_products`.`quantity`) AS `pquantity` from `tbl_invoice_products` group by `tbl_invoice_products`.`product_id`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `working_ts`.`tbl_invoice_products`.`product_id` AS `product_id`,sum(`working_ts`.`tbl_invoice_products`.`quantity`) AS `pquantity` from `working_ts`.`tbl_invoice_products` group by `working_ts`.`tbl_invoice_products`.`product_id`
mariadb-version=100131
