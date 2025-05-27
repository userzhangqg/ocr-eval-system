<?php exit;?>
[16:59:55.288 id-f217] {
    "0": "SHOW_JSON_NOT_EXIT",
    "1": {
        "code": true,
        "timeUse": "0.7882",
        "timeNow": "1748249995.2880",
        "data": "操作成功！",
        "info": 1
    },
    "call": [
        "html/index.php[6] {a41}#Application->run()",
        "bin/data.bin[2] {a41}#Application->autorun()",
        "bin/data.bin[2] {a41}#Application->appRun("user.index.init")",
        "bin/data.bin[2] ActionCall("user.index.init")",
        "app/autoload.php[160] ActionApply("user.index.init",)",
        "app/autoload.php[138] {e15}#userIndex->init()",
        "user/index.class.php[24] ActionCall("install.index.check")",
        "app/autoload.php[160] ActionApply("install.index.check",)",
        "app/autoload.php[138] {a85}#installIndex->check()",
        "install/index.class.php[91] ActionCall("install.index.save")",
        "app/autoload.php[160] ActionApply("install.index.save",)",
        "app/autoload.php[138] {a85}#installIndex->save()",
        "install/index.class.php[562] {a85}#installIndex->saveUser()",
        "install/index.class.php[854] {a85}#installIndex->sysInit()",
        "install/index.class.php[910] {a85}#installIndex->addGroup()",
        "install/index.class.php[983] ActionCallHook("admin.group.add")",
        "app/autoload.php[202] ActionApply("admin.group.add",)",
        "app/autoload.php[138] {649}#adminGroup->add()",
        "admin/group.class.php[145] show_json(args)"
    ]
}
[16:59:55.469 id-f217] {
    "0": "SHOW_JSON_NOT_EXIT",
    "1": {
        "code": true,
        "timeUse": "0.9687",
        "timeNow": "1748249995.4685",
        "data": "操作成功！",
        "info": 1
    },
    "call": [
        "html/index.php[6] {a41}#Application->run()",
        "bin/data.bin[2] {a41}#Application->autorun()",
        "bin/data.bin[2] {a41}#Application->appRun("user.index.init")",
        "bin/data.bin[2] ActionCall("user.index.init")",
        "app/autoload.php[160] ActionApply("user.index.init",)",
        "app/autoload.php[138] {e15}#userIndex->init()",
        "user/index.class.php[24] ActionCall("install.index.check")",
        "app/autoload.php[160] ActionApply("install.index.check",)",
        "app/autoload.php[138] {a85}#installIndex->check()",
        "install/index.class.php[91] ActionCall("install.index.save")",
        "app/autoload.php[160] ActionApply("install.index.save",)",
        "app/autoload.php[138] {a85}#installIndex->save()",
        "install/index.class.php[562] {a85}#installIndex->saveUser()",
        "install/index.class.php[854] {a85}#installIndex->sysInit()",
        "install/index.class.php[913] {a85}#installIndex->addUser()",
        "install/index.class.php[1061] ActionCallHook("admin.member.add")",
        "app/autoload.php[202] ActionApply("admin.member.add",)",
        "app/autoload.php[138] {0df}#adminMember->add()",
        "admin/member.class.php[171] show_json(args)"
    ]
}
