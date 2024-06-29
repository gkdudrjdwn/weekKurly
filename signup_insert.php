<?
    //1. 권한 설정
    // PHP변수는 반드시 첫글자 $사인 사용
    //종결은 반드시 ; 세미콜론 사용
    //등호 뒤에 = value 값은 반드시 문자열은 인용부호로 감싸준다.
    $DB_SERVER = 'localhost';
    $DB_NAME = 'ha0jeong';
    $DB_USER_PW = 'alsqhd881226!';
    $DB_USER_NAME = 'ha0jeong';

    //1-2. 데이터베이스 커넥션
    $conn = mysqli_connect($DB_SERVER, $DB_USER_NAME, $DB_USER_PW, $DB_NAME);
    mysqli_set_charset($conn,'utf8');

    //1-3. 데이터베이스 접속 확인 => 성공: true, 실패:false
    if($conn == false){
        echo "데이터베이스 접속 실패! 접속 정보 확인";
    }else{
        echo "데이터베이스 접속 성공!";
    }

    //2. 본문
    //2-1. 회원가입 입력 insert    

    
    //3. 결문
?>
