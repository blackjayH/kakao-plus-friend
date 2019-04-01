<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];
    session_start();
    $_SESSION['id'];
    $userid;

    $conn = mysqli_connect(
      'localhost',
      'root',
      'wldnrwldnr1',
      'mydb');

    switch ($content) {
      case "장바구니 보기":
      {
        $userid = $_SESSION['id'];
        $sql = "select * from buylist where id = '".$userid."' ";
        $result = mysqli_query($conn, $sql);
        $str1 = "장바구니 품목 : ";
        while ($row = mysqli_fetch_array($result)) {
            $str1 = $str1.$row['bname'];
        }

        echo '
        {
          "message":
          {
            "text": $str
          },
          "keyboard":
          {
            "type": "buttons",
            "buttons": ["장바구니 보기", "냉장고상품 보기"]
          }
        }';

      }
      break;

      case "냉장고상품 보기":
      {
        $userid = $_SESSION['id'];
        $sql = "select * from rflist where id = '".$userid."' ";
        $result = mysqli_query($conn, $sql);
        $str2 = "냉장고상품 품목";
        while ($row = mysqli_fetch_array($result)) {
            $str2 = $str2.$row['bname'];
        }

        echo '
        {
          "message":
          {
            "text": $str2
          },
          "keyboard":
          {
            "type": "buttons",
            "buttons": ["장바구니 보기", "냉장고상품 보기"]
          }
        }';

      }
      break;

      case "박고드 시작하기":
      echo '
      {
        "message":
        {
          "text": "장바구니 보기와 냉장고상품 보기 중 가져올 정보를 고르시오."
        },
        "keyboard":
        {
          "type": "buttons",
          "buttons": ["장바구니 보기", "냉장고상품 보기"]
        }
      }';
      break;

      case "로그인":
      if(!isset($_SESSION['id']))
      {
        echo '
        {
          "message":
          {
            "text": "아이디와 비밀번호를 입력해주세요.(형식 : ID PW(ex)zzz123 1234)"
          },
          "keyboard":
          {
            "type": "text"
          }
        }';
      }
      else
      {
        echo '
        {
          "message":
          {
            "text": "이미 로그인되어 있습니다. "
          },
          "keyboard":
          {
            "type": "buttons",
            "buttons": ["로그인", "박고드 시작하기", "가이드 북"]
          }
        }';
      }
      break;

      case "가이드 북":
      echo '
      {
        "message":
        {
          "text": "가이드북 안내를 하겠습니다. 처음 박고드 계정으로 로그인을 하게되면 박고드 앱을 키지않고 장바구니 정보와 냉장고 상품 정보를 볼 수 있습니다. 감사합니다~"
        },
        "keyboard":
        {
          "type": "buttons",
          "buttons": ["로그인", "박고드 시작하기", "가이드 북"]
        }
      }';
      break;

      default:
      {
        $strTok = explode('',$content);
        $cnt = count($strTok);
        $str1 = strTok[0];
        $str2 = strTok[1];
        $sql = "select * from user where id = '".$str1."' pw = '".$tr2"' ";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
          $_SESSION['id'] = $content;
          echo '
          {
            "message":
            {
              "text": "로그인 성공했습니다."
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons": ["로그인", "박고드 시작하기", "가이드 북"]
            }
          }';
        }
        else
        {
          echo '
          {
            "message":
            {
              "text": "아이디나 비밀번호가 틀렸습니다.
              아이디와 비밀번호를 다시 입력해주세요.(형식 : ID PW(ex)zzz123 1234)"
            },
            "keyboard":
            {
              "type": "text"
            }
          }';
        }
?>
