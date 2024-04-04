package edu.kh.demo.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import edu.kh.demo.model.dto.Student;
import jakarta.servlet.http.HttpServletRequest;

@Controller // 원인 1에 대한 조치내용 : 컨트롤러(요청/응답) 역할 명시 및 Bean 등록
@RequestMapping("student") // 원인 2에 대한 조치내용 : 모든 student에 대한 요청을 매핑
public class StudentController {

	
	@PostMapping("select") // 원인 2에 대한 조치내용 : /student/select POST 요청 방식 매핑
	public String selectStudent(HttpServletRequest req, @ModelAttribute Student student) {
		
		// 원인 3에 대한 조치 내용
		String name = req.getParameter("name");
		
		int age = Integer.parseInt(req.getParameter("age"));
		
		String addr = req.getParameter("addr");
		
		
		Student std = new Student(name, age, addr);			
		
		req.setAttribute("std", std);
		

		return "student/select";
	}
}

//
//public class StudentController {
//
//public String selectStudent(HttpServletRequest req, @ModelAttribute Student student) {
//
//req.setAttribute("stdName", student.getStdName());
//
//req.setAttribute("stdAge", student.getStdAge());
//
//req.setAttribute("stdAddress", student.getStdAddress());
//
//return "student/select";
//
//}
//
//... 이하 생략
//
//}