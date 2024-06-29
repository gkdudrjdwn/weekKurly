<?

//CORS 보내는 주소 받는주소 다른경우 오류 발생 (거부정책)

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');

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

//회원가입 폼 리액트 전송받은 데이터 입력
$userId =$_POST['userId']; 
$userPw =$_POST['userPw'];
$userName =$_POST['userName'];
$userEmail =$_POST['userEmail'];
$userHp =$_POST['userHp'];
$userPostcode =$_POST['userPostcode'];
$userAddr1 =$_POST['userAddr1'];
$userAddr2 =$_POST['userAddr2'];
$userGender =$_POST['userGender'];
$userYear =$_POST['userYear'];
$userMonth =$_POST['userMonth'];
$userDate =$_POST['userDate'];
$userChooga =$_POST['userChooga'];
$userChamyeoEvent =$_POST['userChamyeoEvent'];
$userChoochunin =$_POST['userChoochunin'];
$userService =$_POST['userService'];

/* INSERT 예제 */
$sql = "INSERT INTO signup_table (userId,userPw,userName,userEmail,userHp,userPostcode,userAddr1,userAddr2,userGender,userYear,userMonth,userDate,userChooga,userChamyeoEvent,userChoochunin,userService) 
            VALUES ('$userId','$userPw','$userName','$userEmail','$userHp','$userPostcode','$userAddr1','$userAddr2','$userGender','$userYear','$userMonth','$userDate','$userChooga','$userChamyeoEvent','$userChoochunin','$userService' )";

$result = mysqli_query($conn, $sql);
 
if($result) {
     echo 1; 
}else { 
    echo 0; 
}

//mysqli_close($conn);


?>