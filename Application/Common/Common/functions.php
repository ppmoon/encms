<?php

	/**
	 * 抛出异常处理
	 * @param string $msg 异常消息
	 * @param integer $code 异常代码 默认为0
	 * @return void
	 */
	function E($msg, $code=0) {
		throw new Think\Exception($msg, $code);
	}
	
?>