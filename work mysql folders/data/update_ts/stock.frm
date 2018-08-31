TYPE=VIEW
query=select `update_ts`.`tpurchase`.`product_id` AS `product_id`,`update_ts`.`tpurchase`.`pquantity` AS `pquantity`,`update_ts`.`tsold`.`squantity` AS `squantity`,(`update_ts`.`tpurchase`.`pquantity` - ifnull(`update_ts`.`tsold`.`squantity`,0)) AS `stock` from (`update_ts`.`tpurchase` left join `update_ts`.`tsold` on((`update_ts`.`tpurchase`.`product_id` = `update_ts`.`tsold`.`product_id`)))
md5=8b8806b322adbb011a6eb948bd876dfe
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-06-05 19:01:27
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `update_ts`.`tpurchase`.`product_id` AS `product_id`,`update_ts`.`tpurchase`.`pquantity` AS `pquantity`,`update_ts`.`tsold`.`squantity` AS `squantity`,(`update_ts`.`tpurchase`.`pquantity` - ifnull(`update_ts`.`tsold`.`squantity`,0)) AS `stock` from (`update_ts`.`tpurchase` left join `update_ts`.`tsold` on((`update_ts`.`tpurchase`.`product_id` = `update_ts`.`tsold`.`product_id`)))
mariadb-version=100131
