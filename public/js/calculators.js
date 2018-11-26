
/*!
    Types of material
*/

var S1 = {
    PLYWOOD_6: {
        "size": 6,
        "material": "Фанера 6"
    },
    PLYWOOD_9: {
        "size": 9,
        "material": "Фанера 9"
    },
    PLYWOOD_12: {
        "size": 12,
        "material": "Фанера 12"
    }
}

var S2 = {
    PLYWOOD_15: {
        "size": 15,
        "material": "Фанера 15"
    },
    PLYWOOD_18: {
        "size": 18,
        "material": "Фанера 18"
    },
    PLYWOOD_21: {
        "size": 21,
        "material": "Фанера 21"
    },
    WOOD_20: {
        "size": 20,
        "material": "Доска 20"
    },
    WOOD_30: {
        "size": 30,
        "material": "Доска 30"
    }
}

var S3 = {
    PLYWOOD_15: {
        "size": 15,
        "material": "Фанера 15"
    },
    PLYWOOD_18: {
        "size": 18,
        "material": "Фанера 18"
    },
    PLYWOOD_21: {
        "size": 21,
        "material": "Фанера 21"
    }
}

class CalculatorForStandartBoxType
{
    constructor()
    {
        this.l = 0;
        this.w = 0;
        this.h = 0;

        this.s1 = {};
        this.s2 = {};
        this.s3 = {};

        this.w0 = 0;
        this.n = 0;
        this.nb = 0;
    }

    setL (L) {
        this.l = L;
    }
    
    setW (W) {
        this.w = W;
    }

    setH (H) {
        this.h = H;
    }

    setS1 (S1) {
        this.s1 = S1;
    }
    
    setS2 (S2) {
        this.s2 = S2;
    }

    setS3 (S3) {
        this.s3 = S3;
    }

    setW0 (W0) {
        this.w0 = W0;
    }

    getSizes () {
        return JSON.stringify({
            "L": this.l,
            "W": this.w,
            "H": this.w,
            "S": {
                "S1": this.s1,
                "S2": this.s2,
                "S3": this.s3
            },
            "W0": this.w0,
            "N": this.n,
            "NB": this.nb,
            "sizes": {
                "AN": {
                    "descp": "Крышка",
                    "detail": "Деталь А",
                    "desg": "AAxAB",
                    "count": 1,
                    "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2),
                    "size_2": this.w + (this.s1.size * 2 ) + (this.s2.size * 2),
                    "material": this.s1.material
                },
                "BN": {
                    "descp": "Панель B",
                    "detail": "Деталь B",
                    "desg": "BAxBB",
                    "count": 2,
                    "size_1": this.h,
                    "size_2": this.w,
                    "material": this.s1.material
                },
                "CN": {
                    "descp": "Панель С",
                    "detail": "Деталь C",
                    "desg": "CAxCB",
                    "count": 2,
                    "size_1": this.h + this.s3.size,
                    "size_2": this.l + (this.s1.size * 2 ) + (this.s2.size * 2),
                    "material": this.s1.material
                },
                "DN": {
                    "descp": "Дно",
                    "detail": "Деталь D",
                    "desg": "DAxDB",
                    "count": 1,
                    "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2),
                    "size_2": this.w,
                    "material": this.s3.material
                },
                "EN": {
                    "descp": "Лыжи",
                    "detail": "Деталь E",
                    "desg": "EAxEB",
                    "count": 2,
                    "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2),
                    "size_2": this.w0,
                    "material": this.s2.material
                },
                "FN": {
                    "descp": "Ручки",
                    "detail": "Деталь F",
                    "desg": "FAxFB",
                    "count": 2,
                    "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2),
                    "size_2": this.w0,
                    "material": this.s2.material
                },
                "ON": {
                    "descp": "Обвязки",
                    "O1N": {
                        "detail": "Деталь О1",
                        "desg": "O1AxO1B",
                        "count": 2,
                        "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2),
                        "size_2": this.w0,
                        "material": this.s2.material
                    },
                    "O2N": {
                        "detail": "Деталь О2",
                        "desg": "O2AxO2B",
                        "count": 2,
                        "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2) - this.w0*2,
                        "size_2": this.w0,
                        "material": this.s2.material
                    },
                    "O3N": {
                        "detail": "Деталь О3",
                        "desg": "O3AxO3B",
                        "count": 4,
                        "size_1": this.l,
                        "size_2": this.w0,
                        "material": this.s2.material
                    },
                    "O4N": {
                        "detail": "Деталь О4",
                        "desg": "O4AxO4B",
                        "count": 4,
                        "size_1": this.l + (this.s1.size * 2 ) + (this.s2.size * 2) - this.w0*2,
                        "size_2": this.w0,
                        "material": this.s2.material
                    },
                    "O5N": {
                        "detail": "Деталь О5",
                        "desg": "O5AxO5B",
                        "count": 4,
                        "size_1": this.l + this.s2.size,
                        "size_2": this.w0,
                        "material": this.s2.material
                    },
                    "O6N": {
                        "detail": "Деталь О6",
                        "desg": "O6AxO6B",
                        "count": 4,
                        "size_1": this.w - this.w0*2,
                        "size_2": this.w0,
                        "material": this.s2.material
                    }
                }
            }
        });
    }

};
