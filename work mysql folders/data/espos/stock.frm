TYPE=VIEW
query=select `espos`.`tpurchase`.`product_id` AS `product_id`,`espos`.`tpurchase`.`pquantity` AS `pquantity`,`espos`.`tsold`.`squantity` AS `squantity`,(`espos`.`tpurchase`.`pquantity` - ifnull(`espos`.`tsold`.`squantity`,0)) AS `stock` from (`espos`.`tpurchase` left join `espos`.`tsold` on((`espos`.`tpurchase`.`product_id` = `espos`.`tsold`.`product_id`)))
md5=81c663cfcf3ae406c58436daf58fd671
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-08-09 18:24:02
create-version=2
source=select `tpurchase`.`product_id` AS `product_id`,`tpurchase`.`pquantity` AS `pquantity`,`tsold`.`squantity` AS `squantity`,(`tpurchase`.`pquantity` - ifnull(`tsold`.`squantity`,0)) AS `stock` from (`tpurchase` left join `tsold` on((`tpurchase`.`product_id` = `tsold`.`product_id`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `espos`.`tpurchase`.`product_id` AS `product_id`,`espos`.`tpurchase`.`pquantity` AS `pquantity`,`espos`.`tsold`.`squantity` AS `squantity`,(`espos`.`tpurchase`.`pquantity` - ifnull(`espos`.`tsold`.`squantity`,0)) AS `stock` from (`espos`.`tpurchase` left join `espos`.`tsold` on((`espos`.`tpurchase`.`product_id` = `espos`.`tsold`.`product_id`)))
mariadb-version=100131
