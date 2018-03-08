<html>
<head>
<title>test</title>
</head>
<body>
    <h1>ブロック情報</h1>
    <div>
    	<?php
			foreach($users as $user) {
				echo '<div>'.$user->id.'  ';
				echo '  '.$user->username.'<div>';
			}
    	?>
    </div>
    {{ $users->links('vendor.pagination.bootstrap-4') }}
</body>
</html>
