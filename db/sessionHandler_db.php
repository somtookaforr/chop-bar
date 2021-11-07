<?php
require_once "db/config.php";

class MySQLSessionHandler implements SessionHandlerInterface
{
    public $link;

    public function open($savePath, $sessionName)
    {
        if ($this->link) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function read($sessionId)
    {
        try {
            $stmt = $this->link->prepare("SELECT exercise FROM logs WHERE id = ?");
            $stmt->bind_param("s", $sessionId);
            $stmt->execute();
            $stmt->bind_result($sessionData);
            $stmt->fetch();
            $stmt->close();

            return $sessionData ? $sessionData : '';
        } catch (Exception $e) {
            return '';
        }
    }

    public function write($sessionId, $sessionData)
    {
        try {
            $stmt = $this->link->prepare("REPLACE INTO logs(`id`, `created_at`, `exercise`) VALUES(?, ?, ?)");
            $stmt->bind_param("sis", $sessionId, $time=time(), $sessionData);
            $stmt->execute();
            $stmt->close();

            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

    public function destroy($sessionId)
    {
        try {
            $stmt = $this->link->prepare("DELETE FROM logs WHERE id = ?");
            $stmt->bind_param("s", $sessionId);
            $stmt->execute();
            $stmt->close();

            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

    public function gc($maxlifetime)
    {
        $past = time() - $maxlifetime;

        try {
            $stmt = $this->link->prepare("DELETE FROM logs WHERE `created_at` < ?");
            $stmt->bind_param("i", $past);
            $stmt->execute();
            $stmt->close();

            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

    public function close()
    {
        return TRUE;
    }
}