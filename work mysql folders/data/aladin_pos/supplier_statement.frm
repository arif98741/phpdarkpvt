TYPE=VIEW
query=select `t1`.`date` AS `date`,`t1`.`supplier` AS `supplier`,`t1`.`description` AS `Drescription`,`t1`.`purchase` AS `Debit`,`t1`.`payment` AS `Credit`,(select sum((`aladin_pos`.`tbl_supplier_transaction`.`purchase` - `aladin_pos`.`tbl_supplier_transaction`.`payment`)) AS `Balance` from `aladin_pos`.`tbl_supplier_transaction` where ((`aladin_pos`.`tbl_supplier_transaction`.`supplier` = `t1`.`supplier`) and (`aladin_pos`.`tbl_supplier_transaction`.`date` <= `t1`.`date`))) AS `Balance` from `aladin_pos`.`tbl_supplier_transaction` `t1` order by `t1`.`date`
md5=21c6486f2ad6da12ef6a323bd474a297
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-07-22 20:20:44
create-version=2
source=select `T1`.`date` AS `date`,`T1`.`supplier` AS `supplier`,`T1`.`description` AS `Drescription`,`T1`.`purchase` AS `Debit`,`T1`.`payment` AS `Credit`,(select sum((`tbl_supplier_transaction`.`purchase` - `tbl_supplier_transaction`.`payment`)) AS `Balance` from `tbl_supplier_transaction` where ((`tbl_supplier_transaction`.`supplier` = `T1`.`supplier`) and (`tbl_supplier_transaction`.`date` <= `T1`.`date`))) AS `Balance` from `tbl_supplier_transaction` `T1` order by `T1`.`date`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `t1`.`date` AS `date`,`t1`.`supplier` AS `supplier`,`t1`.`description` AS `Drescription`,`t1`.`purchase` AS `Debit`,`t1`.`payment` AS `Credit`,(select sum((`aladin_pos`.`tbl_supplier_transaction`.`purchase` - `aladin_pos`.`tbl_supplier_transaction`.`payment`)) AS `Balance` from `aladin_pos`.`tbl_supplier_transaction` where ((`aladin_pos`.`tbl_supplier_transaction`.`supplier` = `t1`.`supplier`) and (`aladin_pos`.`tbl_supplier_transaction`.`date` <= `t1`.`date`))) AS `Balance` from `aladin_pos`.`tbl_supplier_transaction` `t1` order by `t1`.`date`
mariadb-version=100131
