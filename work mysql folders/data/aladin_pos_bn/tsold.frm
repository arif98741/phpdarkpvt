TYPE=VIEW
query=select `aladin_pos_bn`.`tbl_sell_products`.`product_id` AS `product_id`,sum(`aladin_pos_bn`.`tbl_sell_products`.`quantity`) AS `squantity` from `aladin_pos_bn`.`tbl_sell_products` group by `aladin_pos_bn`.`tbl_sell_products`.`product_id`
md5=9591dcbbd8377f04c579c0304c94b256
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-28 20:08:33
create-version=2
source=select `tbl_sell_products`.`product_id` AS `product_id`,sum(`tbl_sell_products`.`quantity`) AS `squantity` from `tbl_sell_products` group by `tbl_sell_products`.`product_id`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `aladin_pos_bn`.`tbl_sell_products`.`product_id` AS `product_id`,sum(`aladin_pos_bn`.`tbl_sell_products`.`quantity`) AS `squantity` from `aladin_pos_bn`.`tbl_sell_products` group by `aladin_pos_bn`.`tbl_sell_products`.`product_id`
mariadb-version=100131
