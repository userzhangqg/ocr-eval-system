<?php exit;?>
[15:18:39.215 id-8e19] Connection lost
{
    "0": "html/index.php[6] Application->run()",
    "1": "bin/data.bin[2] Application->appRun("user.view.call")",
    "2": "bin/data.bin[2] ActionCall("user.view.call")",
    "3": "app/autoload.php[160] ActionApply("user.view.call",)",
    "4": "app/autoload.php[138] userView->call()",
    "5": "user/view.class.php[161] AutoTask::start()",
    "6": "bin/data.bin[2] AutoTask::cacheClear()",
    "7": "bin/data.bin[2] ModelBaseLight->cacheClear()",
    "8": "bin/data.bin[2] ModelBaseOption->cacheRemove("System.taskList")",
    "9": "bin/data.bin[2] Cache::remove("SystemOption_System.taskList")",
    "10": "bin/data.bin[2] CacheLock::lock("SystemOption_System.taskList")",
    "11": "bin/data.bin[2] CacheLockRedis->lock("lock_e7bd0a64ef5feae0252924abc48b3825","20")",
    "12": "bin/data.bin[2] CacheRedis->get("lock_e7bd0a64ef5feae0252924abc48b3825")",
    "13": "bin/data.bin[2] Redis->get("lock_e7bd0a64ef5feae0252924abc48b3825")",
    "memory": "4.570M"
}
{"user\/view\/call":"","_t":"1","URLrouter":"user.view.call","URLremote":["user","view","call"]}
