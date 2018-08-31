TYPE=VIEW
query=select `ts3`.`tpurchase`.`product_id` AS `product_id`,`ts3`.`tpurchase`.`pquantity` AS `pquantity`,`ts3`.`tsold`.`squantity` AS `squantity`,(`ts3`.`tpurchase`.`pquantity` - ifnull(`ts3`.`tsold`.`squantity`,0)) AS `stock` from (`ts3`.`tpurchase` left join `ts3`.`tsold` on((`ts3`.`tpurchase`.`product_id` = `ts3`.`tsold`.`product_id`)))
md5=50481276209fa9a9950da5c795eaab21
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-05-07 20:06:01
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `ts3`.`tpurchase`.`product_id` AS `product_id`,`ts3`.`tpurchase`.`pquantity` AS `pquantity`,`ts3`.`tsold`.`squantity` AS `squantity`,(`ts3`.`tpurchase`.`pquantity` - ifnull(`ts3`.`tsold`.`squantity`,0)) AS `stock` from (`ts3`.`tpurchase` left join `ts3`.`tsold` on((`ts3`.`tpurchase`.`product_id` = `ts3`.`tsold`.`product_id`)))
mariadb-version=100131
