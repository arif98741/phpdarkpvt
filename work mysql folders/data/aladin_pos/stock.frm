TYPE=VIEW
query=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`aladin_pos`.`tpurchase` left join `aladin_pos`.`tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
md5=64612f512e485c9f3185db9ad144e18b
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-05-23 10:19:09
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`aladin_pos`.`tpurchase` left join `aladin_pos`.`tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
mariadb-version=100131
