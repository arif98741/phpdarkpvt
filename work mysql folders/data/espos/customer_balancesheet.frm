TYPE=VIEW
query=select `t1`.`date` AS `date`,`t1`.`sell_id` AS `Ref`,`t1`.`customer_id` AS `Customer`,`t1`.`Drescription` AS `Drescription`,`t1`.`payable` AS `Debit`,`t1`.`paid` AS `Credit`,(select sum((`espos`.`customer_statement`.`payable` - `espos`.`customer_statement`.`paid`)) AS `Balance` from `espos`.`customer_statement` where ((`espos`.`customer_statement`.`customer_id` = `t1`.`customer_id`) and (`espos`.`customer_statement`.`date` <= `t1`.`date`))) AS `Balance` from `espos`.`customer_statement` `t1` order by `t1`.`date`
md5=690f5e290b4bb60f83a257b22481e601
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-08-09 18:23:59
create-version=2
source=select `T1`.`date` AS `date`,`T1`.`sell_id` AS `Ref`,`T1`.`customer_id` AS `Customer`,`T1`.`Drescription` AS `Drescription`,`T1`.`payable` AS `Debit`,`T1`.`paid` AS `Credit`,(select sum((`customer_statement`.`payable` - `customer_statement`.`paid`)) AS `Balance` from `customer_statement` where ((`customer_statement`.`customer_id` = `T1`.`customer_id`) and (`customer_statement`.`date` <= `T1`.`date`))) AS `Balance` from `customer_statement` `T1` order by `T1`.`date`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `t1`.`date` AS `date`,`t1`.`sell_id` AS `Ref`,`t1`.`customer_id` AS `Customer`,`t1`.`Drescription` AS `Drescription`,`t1`.`payable` AS `Debit`,`t1`.`paid` AS `Credit`,(select sum((`espos`.`customer_statement`.`payable` - `espos`.`customer_statement`.`paid`)) AS `Balance` from `espos`.`customer_statement` where ((`espos`.`customer_statement`.`customer_id` = `t1`.`customer_id`) and (`espos`.`customer_statement`.`date` <= `t1`.`date`))) AS `Balance` from `espos`.`customer_statement` `t1` order by `t1`.`date`
mariadb-version=100131
