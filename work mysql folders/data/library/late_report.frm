TYPE=VIEW
query=select `library`.`book`.`book_id` AS `book_id`,`library`.`book`.`book_name` AS `book_name`,`library`.`book`.`writer` AS `writer`,`library`.`student`.`name` AS `name`,`library`.`student`.`department` AS `department`,`library`.`student`.`session` AS `session`,`library`.`borrow`.`bdate` AS `bdate`,`library`.`borrow`.`rdate` AS `rdate`,`library`.`borrow`.`duration` AS `duration` from ((`library`.`book` join `library`.`borrow` on((`library`.`book`.`book_id` = `library`.`borrow`.`book_id`))) join `library`.`student` on((`library`.`borrow`.`student_id` = `library`.`student`.`stu_id`))) where ((`library`.`book`.`status` = \'borrowed\') and (`library`.`borrow`.`status` = \'borrowed\'))
md5=e2221dd01b3d3d337c5c9ef8be411328
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-06-14 03:04:06
create-version=2
source=SELECT\n    book.book_id,\n    book.book_name,\n    book.writer,\n    student.name,\n    student.department,\n    student.session,\n    borrow.bdate,\n    borrow.rdate,\n    borrow.duration\nFROM\n    book\nJOIN borrow ON book.book_id = borrow.book_id\nJOIN student ON borrow.student_id = student.stu_id\nWHERE\n    book.status = \'borrowed\' AND borrow.status = \'borrowed\'
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `library`.`book`.`book_id` AS `book_id`,`library`.`book`.`book_name` AS `book_name`,`library`.`book`.`writer` AS `writer`,`library`.`student`.`name` AS `name`,`library`.`student`.`department` AS `department`,`library`.`student`.`session` AS `session`,`library`.`borrow`.`bdate` AS `bdate`,`library`.`borrow`.`rdate` AS `rdate`,`library`.`borrow`.`duration` AS `duration` from ((`library`.`book` join `library`.`borrow` on((`library`.`book`.`book_id` = `library`.`borrow`.`book_id`))) join `library`.`student` on((`library`.`borrow`.`student_id` = `library`.`student`.`stu_id`))) where ((`library`.`book`.`status` = \'borrowed\') and (`library`.`borrow`.`status` = \'borrowed\'))
mariadb-version=100131
