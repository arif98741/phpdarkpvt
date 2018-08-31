TYPE=VIEW
query=select `t1`.`date` AS `date`,`t1`.`sell_id` AS `Ref`,`t1`.`customer_id` AS `Customer`,`t1`.`Drescription` AS `Drescription`,`t1`.`payable` AS `Debit`,`t1`.`paid` AS `Credit`,(select sum((`newpos`.`customer_statement`.`payable` - `newpos`.`customer_statement`.`paid`)) AS `Balance` from `newpos`.`customer_statement` where ((`newpos`.`customer_statement`.`customer_id` = `t1`.`customer_id`) and (`newpos`.`customer_statement`.`date` <= `t1`.`date`))) AS `Balance` from `newpos`.`customer_statement` `t1` order by `t1`.`date`
md5=f3d66ec743c3b1ad3ad780b84cce4dbb
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-21 20:43:42
create-version=2
source=select `t1`.`date` AS `date`,`t1`.`sell_id` AS `Ref`,`t1`.`customer_id` AS `Customer`,`t1`.`Drescription` AS `Drescription`,`t1`.`payable` AS `Debit`,`t1`.`paid` AS `Credit`,(select sum((`customer_statement`.`payable` - `customer_statement`.`paid`)) AS `Balance` from `customer_statement` where ((`customer_statement`.`customer_id` = `t1`.`customer_id`) and (`customer_statement`.`date` <= `t1`.`date`))) AS `Balance` from `customer_statement` `t1` order by `t1`.`date`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `t1`.`date` AS `date`,`t1`.`sell_id` AS `Ref`,`t1`.`customer_id` AS `Customer`,`t1`.`Drescription` AS `Drescription`,`t1`.`payable` AS `Debit`,`t1`.`paid` AS `Credit`,(select sum((`newpos`.`customer_statement`.`payable` - `newpos`.`customer_statement`.`paid`)) AS `Balance` from `newpos`.`customer_statement` where ((`newpos`.`customer_statement`.`customer_id` = `t1`.`customer_id`) and (`newpos`.`customer_statement`.`date` <= `t1`.`date`))) AS `Balance` from `newpos`.`customer_statement` `t1` order by `t1`.`date`
mariadb-version=100131
