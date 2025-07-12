--liste des depatements :
SELECT d.dept_no, d.dept_name, e.first_name, e.last_name
FROM departments d
LEFT JOIN dept_manager dm ON d.dept_no = dm.dept_no AND dm.to_date = '9999-01-01'
LEFT JOIN employees e ON dm.emp_no = e.emp_no;

--Pagination:
SELECT * FROM employees LIMIT 0, 20; -- page 1
SELECT * FROM employees LIMIT 20, 20; -- page 2

--Nombre employés par département:
SELECT d.dept_name, COUNT(de.emp_no)
FROM departments d
JOIN dept_emp de ON d.dept_no = de.dept_no
WHERE de.to_date = '9999-01-01'
GROUP BY d.dept_no;

--Nombre d'hommes et femmes par département:
SELECT t.title,
  COUNT(CASE WHEN e.gender = 'M' THEN 1 END) AS hommes,
  COUNT(CASE WHEN e.gender = 'F' THEN 1 END) AS femmes,
  ROUND(AVG(s.salary), 2) AS salaire_moyen
FROM employees e
JOIN titles t ON e.emp_no = t.emp_no
JOIN salaries s ON e.emp_no = s.emp_no
WHERE s.to_date = '9999-01-01' AND t.to_date = '9999-01-01'
GROUP BY t.title;

--emploie le plus long dans la fiche employes:
SELECT title, DATEDIFF(to_date, from_date) AS duree
FROM titles
WHERE emp_no = ?
ORDER BY duree DESC
LIMIT 1;
