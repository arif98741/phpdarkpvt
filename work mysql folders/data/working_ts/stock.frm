TYPE=VIEW
query=select `working_ts`.`tpurchase`.`product_id` AS `product_id`,`working_ts`.`tpurchase`.`pquantity` AS `pquantity`,`working_ts`.`tsold`.`squantity` AS `squantity`,(`working_ts`.`tpurchase`.`pquantity` - ifnull(`working_ts`.`tsold`.`squantity`,0)) AS `stock` from (`working_ts`.`tpurchase` left join `working_ts`.`tsold` on((`working_ts`.`tpurchase`.`product_id` = `working_ts`.`tsold`.`product_id`)))
md5=f67183a67b7eb498f7ae117e62199967
updatable=0
algorithm=0
definer_user=dteservicebd
definer_host=localhost
suid=1
with_check_option=0
timestamp=2018-07-04 21:40:03
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `working_ts`.`tpurchase`.`product_id` AS `product_id`,`working_ts`.`tpurchase`.`pquantity` AS `pquantity`,`working_ts`.`tsold`.`squantity` AS `squantity`,(`working_ts`.`tpurchase`.`pquantity` - ifnull(`working_ts`.`tsold`.`squantity`,0)) AS `stock` from (`working_ts`.`tpurchase` left join `working_ts`.`tsold` on((`working_ts`.`tpurchase`.`product_id` = `working_ts`.`tsold`.`product_id`)))
mariadb-version=100131
