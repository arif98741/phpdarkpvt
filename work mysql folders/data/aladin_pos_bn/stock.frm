TYPE=VIEW
query=select `aladin_pos_bn`.`tpurchase`.`product_id` AS `product_id`,`aladin_pos_bn`.`tpurchase`.`pquantity` AS `pquantity`,`aladin_pos_bn`.`tsold`.`squantity` AS `squantity`,(`aladin_pos_bn`.`tpurchase`.`pquantity` - ifnull(`aladin_pos_bn`.`tsold`.`squantity`,0)) AS `stock` from (`aladin_pos_bn`.`tpurchase` left join `aladin_pos_bn`.`tsold` on((`aladin_pos_bn`.`tpurchase`.`product_id` = `aladin_pos_bn`.`tsold`.`product_id`)))
md5=2e9238b986e2645edad9b37131d0aaa3
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-28 20:08:33
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `aladin_pos_bn`.`tpurchase`.`product_id` AS `product_id`,`aladin_pos_bn`.`tpurchase`.`pquantity` AS `pquantity`,`aladin_pos_bn`.`tsold`.`squantity` AS `squantity`,(`aladin_pos_bn`.`tpurchase`.`pquantity` - ifnull(`aladin_pos_bn`.`tsold`.`squantity`,0)) AS `stock` from (`aladin_pos_bn`.`tpurchase` left join `aladin_pos_bn`.`tsold` on((`aladin_pos_bn`.`tpurchase`.`product_id` = `aladin_pos_bn`.`tsold`.`product_id`)))
mariadb-version=100131
