-- 1. 사원의 사원번호, 풀네임, 직책명을 출력
-- SELECT emp.emp_no , concat(emp.last_name,' ' ,emp.first_name) , ti.title
-- FROM employees emp 
-- 	INNER JOIN titles ti
-- 		ON emp.emp_no = ti.emp_no;

-- 2. 사원의 사원번호, 성별, 현재 월급을 출력
-- SELECT emp.emp_no , emp.gender , sa.to_date, sa.salary
-- FROM employees emp 
-- 	INNER JOIN salaries sa
-- 		ON emp.emp_no = sa.emp_no
-- 	WHERE sa.to_date = '9999-01-01';

-- 3. 10010사원의 풀네임 과거부터 현재까지 월급 이력을 출력
-- SELECT concat(emp.last_name,' ' ,emp.first_name) ,sa.from_date , sa.to_date , sa.salary 
-- FROM employees emp 
-- 	INNER JOIN salaries sa
-- 		ON emp.emp_no = sa.emp_no
-- 	WHERE emp.emp_no = 10010;

-- 4. 사원의 사원번호, 풀네임, 소속부서명을 출력
-- SELECT emp.emp_no, concat(emp.last_name,' ',emp.first_name) , de.dept_name
-- FROM employees emp
-- 	INNER JOIN dept_emp dep 
-- 		ON emp.emp_no = dep.emp_no
-- 	INNER JOIN departments de 
-- 		ON dep.dept_no = de.dept_no
-- WHERE dep.to_date= '9999-01-01'
-- ORDER BY emp.emp_no;

-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임 ,월급을 출력
-- SELECT RANK()over(ORDER BY sa.salary deSC) rank_sal , sa.emp_no, concat(emp.last_name,' ' ,emp.first_name) ,sa.salary , sa.to_date
-- FROM salaries sa 
-- 	INNER JOIN employees emp
-- 		on sa.emp_no=emp.emp_no
-- WHERE sa.to_date='9999-01-01'
-- limit 10;
		
-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일  출력
-- SELECT de.dept_name , concat(emp.last_name,' ',emp.first_name) , emp.hire_date , dm.to_date
-- FROM dept_manager dm
-- 	INNER JOIN departments de 
-- 		ON dm.dept_no = de.dept_no 
-- 	INNER JOIN employees emp 
-- 		ON emp.emp_no = dm.emp_no
-- WHERE dm.to_date = '9999-01-01';

-- SELECT dep.dept_no , dep.dept_name, concat(emp.last_name,' ' ,emp.first_name) , emp.hire_date
-- FROM departments dep
-- INNER JOIN dept_manager dm ON dm.dept_no = dep.dept_no
-- INNER JOIN employees emp ON dm.emp_no = emp.emp_no
-- WHERE dm.to_date='9999-01-01'
-- ORDER BY dep.dept_no asc;

-- 7.현재 직책이 스태프인 사원의 현재 평균 월급 출력
-- SELECT ti.title ,avg(sa.salary)
-- FROM titles ti 
-- 	INNER JOIN salaries sa
-- 		ON ti.emp_no = sa.emp_no
-- WHERE ti.title='Staff' and sa.to_date = '9999-01-01' and ti.to_date = '9999-01-01';

-- 8.부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력
-- SELECT concat(emp.last_name,' ' ,emp.first_name) , emp.hire_date , emp.emp_no ,dm.dept_no
-- FROM employees emp
-- 	INNER JOIN dept_manager dm 
-- 		ON emp.emp_no = dm.emp_no;
-- 
-- 9.현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순 출력
-- SELECT ti.title , ti.to_date, cast(AVG(sa.salary) as int) AS a_s
-- FROM titles ti
-- 	inner JOIN salaries sa 
-- 		ON ti.emp_no = sa.emp_no
-- WHERE ti.to_date='9999-01-01' and sa.to_date = '9999-01-01'
-- GROUP BY ti.title having a_s>=60000
-- ORDER BY a_s DESC;

-- SELECT ti.title , ti.to_date, TRUNCATE(AVG(sa.salary),0)
-- FROM titles ti
-- 	inner JOIN salaries sa 
-- 		ON ti.emp_no = sa.emp_no
-- WHERE ti.to_date='9999-01-01' and sa.to_date = '9999-01-01'
-- GROUP BY ti.title having AVG(sa.salary)>=60000
-- ORDER BY AVG(sa.salary) DESC;

-- SELECT ti.title , ti.to_date, cast(AVG(sa.salary) AS int) AS a_s
-- FROM titles ti
-- 	inner JOIN salaries sa 
-- 		ON ti.to_date = sa.to_date
-- WHERE ti.to_date='9999-01-01'
-- GROUP BY ti.title having a_s>=60000
-- ORDER BY a_s DESC;

-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력
SELECT ti.title , COUNT(*)
FROM employees em
	INNER JOIN titles ti 
		ON em.emp_no = ti.emp_no
WHERE em.gender = 'F' AND ti.to_date = '9999-01-01'
GROUP BY title;





-- 11. 직급별 퇴사한 여자 수
-- SELECT a.gender, COUNT(a.gender) AS cnt
-- FROM employees a
-- INNER JOIN (
-- SELECT emp_no
-- FROM titles
-- GROUP BY emp_no HAVING MAX(to_date) != DATE('9999-01-01')
-- ) b
-- ON a.emp_no = b.emp_no
-- GROUP BY a.gender;