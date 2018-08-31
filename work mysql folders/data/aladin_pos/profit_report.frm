TYPE=VIEW
query=select `tsp`.`sell_id` AS `sell_id`,`ts`.`seller` AS `seller`,`tc`.`customer_id` AS `customer_id`,`tc`.`customer_name` AS `customer_name`,`tsp`.`product_id` AS `product_id`,sum(`tsp`.`quantity`) AS `quantity`,`tsp`.`purchase_price` AS `purchase_price`,`tsp`.`unit_price` AS `unit_price`,`ts`.`date` AS `date` from ((`aladin_pos`.`tbl_sell_products` `tsp` join `aladin_pos`.`tbl_customer` `tc` on((`tc`.`customer_id` = `tsp`.`customer_id`))) join `aladin_pos`.`tbl_sell` `ts` on((`tsp`.`sell_id` = `ts`.`sell_id`))) where (`tsp`.`status` = \'1\') group by `tsp`.`sell_id`,`tsp`.`product_id`
md5=724eb56348f0e1782dca165c43695dab
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-05-23 10:20:34
create-version=2
source=select `tsp`.`sell_id` AS `sell_id`,`ts`.`seller` AS `seller`,`tc`.`customer_id` AS `customer_id`,`tc`.`customer_name` AS `customer_name`,`tsp`.`product_id` AS `product_id`,sum(`tsp`.`quantity`) AS `quantity`,`tsp`.`purchase_price` AS `purchase_price`,`tsp`.`unit_price` AS `unit_price`,`ts`.`date` AS `date` from ((`tbl_sell_products` `tsp` join `tbl_customer` `tc` on((`tc`.`customer_id` = `tsp`.`customer_id`))) join `tbl_sell` `ts` on((`tsp`.`sell_id` = `ts`.`sell_id`))) where (`tsp`.`status` = \'1\') group by `tsp`.`sell_id`,`tsp`.`product_id`
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `tsp`.`sell_id` AS `sell_id`,`ts`.`seller` AS `seller`,`tc`.`customer_id` AS `customer_id`,`tc`.`customer_name` AS `customer_name`,`tsp`.`product_id` AS `product_id`,sum(`tsp`.`quantity`) AS `quantity`,`tsp`.`purchase_price` AS `purchase_price`,`tsp`.`unit_price` AS `unit_price`,`ts`.`date` AS `date` from ((`aladin_pos`.`tbl_sell_products` `tsp` join `aladin_pos`.`tbl_customer` `tc` on((`tc`.`customer_id` = `tsp`.`customer_id`))) join `aladin_pos`.`tbl_sell` `ts` on((`tsp`.`sell_id` = `ts`.`sell_id`))) where (`tsp`.`status` = \'1\') group by `tsp`.`sell_id`,`tsp`.`product_id`
mariadb-version=100131
