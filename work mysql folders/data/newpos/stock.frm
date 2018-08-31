TYPE=VIEW
query=select `newpos`.`tpurchase`.`product_id` AS `product_id`,`newpos`.`tpurchase`.`pquantity` AS `pquantity`,`newpos`.`tsold`.`squantity` AS `squantity`,(`newpos`.`tpurchase`.`pquantity` - ifnull(`newpos`.`tsold`.`squantity`,0)) AS `stock` from (`newpos`.`tpurchase` left join `newpos`.`tsold` on((`newpos`.`tpurchase`.`product_id` = `newpos`.`tsold`.`product_id`)))
md5=cfdb4f0fda5778ad1ba6d6c5c9769c2c
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-21 20:43:44
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `newpos`.`tpurchase`.`product_id` AS `product_id`,`newpos`.`tpurchase`.`pquantity` AS `pquantity`,`newpos`.`tsold`.`squantity` AS `squantity`,(`newpos`.`tpurchase`.`pquantity` - ifnull(`newpos`.`tsold`.`squantity`,0)) AS `stock` from (`newpos`.`tpurchase` left join `newpos`.`tsold` on((`newpos`.`tpurchase`.`product_id` = `newpos`.`tsold`.`product_id`)))
mariadb-version=100131
