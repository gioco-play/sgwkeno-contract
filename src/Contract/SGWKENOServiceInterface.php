<?php
declare(strict_types=1);
namespace GiocoPlus\SGWKENO\Contract;
/**
 * rsg
 */
interface SGWKENOServiceInterface {

    /**
     * 遊戲啟動
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @param string $backUrl
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $vendorCode, string $backUrl = '', string $oddType = '');

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $language = 'en');

    /**
     * 抓取遊戲紀錄
     * @param string $opCode
     * @param int $pastMinutes
     * @param string $cacheKey
     * @return mixed
     */
    function betLogGrabber(string $opCode, int $pastMinutes, string $cacheKey);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param int $pastMinutes
     * @return mixed
     */
    function betLogGrabberAll(int $pastMinutes);

    /**
     * 遊戲上分
     *
     * @param string $opCode
     * @param string $account
     * @return mixed
     */
    function gameTransferIn(string $opCode, string $account);

    /**
     * 遊戲下分
     *
     * @param string $opCode
     * @param string $account
     * @param float $amount
     * @return mixed
     */
    function gameTransferOut(string $opCode, string $account, float $amount);

    /**
     * 取得錢包餘額
     *
     * @param string $opCode
     * @param string $account
     * @return mixed
     */
    function getBalance(string $opCode, string $account);

    /**
     * 上/下分失敗 訂單檢核
     * @param string $opCode
     * @param string $orderNo
     * @return mixed
     */
    function orderFailCheck(string $opCode, string $orderNo);

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $memberCode
     * @return mixed
     */
    function accountToVendor(string $opCode, array $vendor, string $memberCode);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $vendorAccount
     * @return mixed
     */
    function accountToOperator(string $opCode, array $vendor, string $vendorAccount);
}

