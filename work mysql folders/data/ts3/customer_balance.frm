TYPE=VIEW
query=select `ts3`.`customer_statement`.`customer_id` AS `customer_id`,sum((`ts3`.`customer_statement`.`payable` - `ts3`.`customer_statement`.`paid`)) AS `balance` from `ts3`.`customer_statement` group by `ts3`.`customer_statement`.`customer_id`
md5=953609ae1f91d06773a639fd32e1440f
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-05-07 20:06:00
create-version=2
source=select `customer_statement`.`customer_id` AS `customer_id`,sum((`customer_statement`.`payable` - `customer_statement`.`paid`)) AS `balance` from `customer_statement` group by `customer_statement`.`customer_id`
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `ts3`.`customer_statement`.`customer_id` AS `customer_id`,sum((`ts3`.`customer_statement`.`payable` - `ts3`.`customer_statement`.`paid`)) AS `balance` from `ts3`.`customer_statement` group by `ts3`.`customer_statement`.`customer_id`
mariadb-version=100131
