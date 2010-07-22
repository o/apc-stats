<?php
class APCStats {

    private $fileCacheInfo;
    private $userCacheInfo;
    private $memoryInfo;

    function __construct() {
        $this->setFileCacheInfo();
        $this->setUserCacheInfo();
        $this->setMemoryInfo();
    }

    public function setFileCacheInfo() {
        $this->fileCacheInfo = new ArrayObject(apc_cache_info('opcode'));
    }

    public function setUserCacheInfo() {
        $this->userCacheInfo = new ArrayObject(apc_cache_info('user', 1));
    }

    public function setMemoryInfo() {
        $this->memoryInfo = new ArrayObject(apc_sma_info());
    }

    public function getFileCacheInfo() {
        return $this->fileCacheInfo;
    }

    public function getUserCacheInfo() {
        return $this->userCacheInfo;
    }

    public function getMemoryInfo() {
        return $this->memoryInfo;
    }

    public function getSegmentSize() {
        return $this->segmentSize;
    }

    public function getMemoryType() {
        return $this->memoryType;
    }

    public function getLockingType() {
        return $this->lockingType;
    }

    public function getFileUploadSupport() {
        return $this->fileUploadSupport;
    }

    public function getApcSettings() {
        return $this->apcSettings;
    }

    public function getTotalMemory() {
        return $this->totalMemory;
    }

    public function getAvailableMemory() {
        return $this->availableMemory;
    }

    public function getUsedMemory() {
        return $this->usedMemory;
    }

    public function getCacheStartTime() {
        return $this->cacheStartTime;
    }

    public function getNow() {
        return $this->now;
    }

    public function getFileHits() {
        return $this->fileHits;
    }

    public function getFileMisses() {
        return $this->fileMisses;
    }

    public function getFileRequestRate() {
        return $this->fileRequestRate;
    }

    public function getFileHitRate() {
        return $this->fileHitRate;
    }

    public function getFileMissRate() {
        return $this->fileMissRate;
    }

    public function getFileInserts() {
        return $this->fileInserts;
    }

    public function getFileInsertRate() {
        return $this->fileInsertRate;
    }

    public function getUserHits() {
        return $this->userHits;
    }

    public function getUserMisses() {
        return $this->userMisses;
    }

    public function getUserRequestRate() {
        return $this->userRequestRate;
    }

    public function getUserHitRate() {
        return $this->userHitRate;
    }

    public function getUserMissRate() {
        return $this->userMissRate;
    }

    public function getUserInserts() {
        return $this->userInserts;
    }

    public function getUserInsertRate() {
        return $this->userInsertRate;
    }

    public function getPhpVersion() {
        return $this->phpVersion;
    }

    public function getApcVersion() {
        return $this->apcVersion;
    }

    public function getNumberOfFiles() {
        return $this->numberOfFiles;
    }

    public function getNumberOfVariables() {
        return $this->numberOfVariables;
    }

    public function getSizeOfFiles() {
        return $this->sizeOfFiles;
    }

    public function getSizeOfVariables() {
        return $this->sizeOfVariables;
    }

}
?>
