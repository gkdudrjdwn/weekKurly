<?

$DB_SERVER = 'localhost';
$DB_NAME = 'ha0jeong';
$DB_USER_PW = 'alsqhd881226!';
$DB_USER_NAME = 'ha0jeong';

$conn = mysqli_connect($DB_SERVER, $DB_USER_NAME, $DB_USER_PW, $DB_NAME);
mysqli_set_charset($conn,'utf8');

  //1-3. 데이터베이스 접속 확인 => 성공: true, 실패:false
  if($conn == false){
    echo "데이터베이스 접속 실패! 접속 정보 확인";
}else{
    echo "데이터베이스 접속 성공!";
}

//회원가입 더미데이터 입력
//변수의 데이터 
$userId ="ha0jeong"; 
$userPw ="ha0jeong1234";
$userName ="정하영";
$userEmail ="ha0jeong@naver.com";
$userHp ="01092524963";
$userPostcode ="06757";
$userAddr1 ="서울특별시 관악구 은천로93";
$userAddr2 ="벽산블루밍 108동 901호";
$userGender ="여자";
$userYear ="1988";
$userMonth ="12";
$userDate ="26";
$userChooga ="11";
$userChamyeoEvent ="11";
$userChoochunin ="11";
$userService  ="이용약관 동의";


/* INSERT 예제 */
$sql = "INSERT INTO signup_table (userId,userPw,userName,userEmail,userHp,userPostcode,userAddr1,userAddr2,userGender,userYear,userMonth,userDate,userChooga,userChamyeoEvent,userChoochunin,userService) 
            VALUES ('$userId','$userPw','$userName','$userEmail','$userHp','$userPostcode','$userAddr1','$userAddr2','$userGender','$userYear','$userMonth','$userDate','$userChooga','$userChamyeoEvent','$userChoochunin','$userService' )";

$result = mysqli_query($conn, $sql);
 
if($result) {
     echo "insert success!"; 
}else { 
    echo "failure"; 
}

//mysqli_close($conn);


?>