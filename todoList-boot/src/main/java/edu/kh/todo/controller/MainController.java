package edu.kh.todo.controller;

import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import edu.kh.todo.model.dto.Todo;
import edu.kh.todo.model.service.TodoService;
import lombok.extern.slf4j.Slf4j;

@Slf4j // 로그 객체 자동 생성
@Controller // 요청/응답 제어 역할 명시 + Bean 등록
public class MainController {
	
	@Autowired // DI (의존성 주입) - 상속관계이거나 같은 타입
	private TodoService service;
	
	@RequestMapping("/") // 최상위(메인 페이지 요청)
	public String mainPage(Model model) {
		
		// 의존성 주입(DI) 확인(진짜 Service 객체 들어옴!)
		log.debug("service : " + service);
		
		// Service 메서드 호출 후 결과 반환 받기 
		// 목록조회, 카운트 결과 2개 기능 수행하고 싶음
		// --> Map 사용
		Map<String, Object> map = service.selectAll();
		
		// map에 담긴 내용 추출
		List<Todo> todoList = (List<Todo>)map.get("todoList");
		int completeCount = (int)map.get("completeCount");
		
		// Model : 값 전달용 객체(request scope) + session 변환 가능
		model.addAttribute("todoList", todoList);
		model.addAttribute("completeCount", completeCount);
		
		return "common/main"; // templates/common/main.html -> 이쪽으로 forward
	}
}
