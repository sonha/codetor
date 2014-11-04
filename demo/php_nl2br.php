<?php 
$text = 'Dành cho những ai đang cô đơn: Tình yêu như là cánh bướm. Bạn càng muốn bắt nó, nó càng bay xa. 

Nhưng nếu bạn để nó bay đi, nó sẽ trở lại vào lúc bạn không còn trông chờ nữa.


Tình yêu mang đến nhiều niềm vui nhưng nó thường mang lại đau khổ, tình yêu chỉ tuyệt vời khi bạn dành cho ai xứng đáng lãnh nhận. Bạn hãy dành thời gian để chọn cho mình người phù hợp nhất. 

Dành cho những ai không còn cô đơn: Tình yêu không làm con người trở nên hoàn hảo nhưng giúp bạn tìm một người giúp bạn trở thành người tốt nhất có thể. 

Dành cho những ai là dân chơi: Đừng bao giờ nói "Tôi yêu em" nếu bạn không chắc. Đừng bao giờ nói về cảm xúc nếu bạn không có. Đừng bao giờ chen vào một cuộc đời chỉ với ý muốn gây đau khổ. Đừng nhìn vào mắt ai khi tất cả những điều bạn làm là giả dối. Thật tàn nhẫn khi bạn làm cho ai đó yêu nhưng bạn không đón nhận tình yêu đó... 
';
// $text2 = htmlspecialchars($text);
$result = str_replace(' ', '&nbsp;', $text);
$result = nl2br($result);
var_dump($result);die;
?>