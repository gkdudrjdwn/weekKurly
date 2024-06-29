-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 24-06-29 13:28
-- 서버 버전: 8.0.36
-- PHP 버전: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `ha0jeong`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `signup_table`
--

CREATE TABLE `signup_table` (
  `idx` int NOT NULL COMMENT '자동증가번호',
  `userId` varchar(16) COLLATE utf8mb4_general_ci NOT NULL COMMENT '회원아이디',
  `userPw` varchar(16) COLLATE utf8mb4_general_ci NOT NULL COMMENT '비밀번호',
  `userName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT '이름',
  `userEmail` varchar(250) COLLATE utf8mb4_general_ci NOT NULL COMMENT '이메일',
  `userHp` varchar(11) COLLATE utf8mb4_general_ci NOT NULL COMMENT '휴대폰',
  `userPostcode` varchar(6) COLLATE utf8mb4_general_ci NOT NULL COMMENT '우편번호',
  `userAddr1` varchar(250) COLLATE utf8mb4_general_ci NOT NULL COMMENT '주소1',
  `userAddr2` varchar(250) COLLATE utf8mb4_general_ci NOT NULL COMMENT '주소2',
  `userGender` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '성별',
  `userYear` int DEFAULT NULL COMMENT '생년',
  `userMonth` int DEFAULT NULL COMMENT '생월',
  `userDate` int DEFAULT NULL COMMENT '생일',
  `userChooga` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '추가입력사항',
  `userChamyeoEvent` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '참여이벤트명',
  `userChoochunin` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '추천인ID',
  `userService` varchar(500) COLLATE utf8mb4_general_ci NOT NULL COMMENT '이용약관동의',
  `userGaib` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '가입일'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='마켓컬리 회원가입 테이블';

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `signup_table`
--
ALTER TABLE `signup_table`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `signup_table`
--
ALTER TABLE `signup_table`
  MODIFY `idx` int NOT NULL AUTO_INCREMENT COMMENT '자동증가번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
