package edu.kh.project.email.model.service;

public interface EmailService {

	/** 이메일 보내기
	 * @param htmlName
	 * @param email
	 * @return authKey
	 */
	String sendEmail(String htmlName, String email);
	
}
