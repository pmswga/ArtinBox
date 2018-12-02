
class CalculatorForPicturesqueBoxType
{
    constructor()
    {
        this.l = 0;
        this.w = 0;
        this.h = 0;

        this.s1 = {};
        this.s2 = {};
        this.s3 = {};

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
            "N": this.n,
            "NB": this.nb,
            "sizes": {
                "AN": {
                    "descp": "Каркас",
                    "detail": "Деталь А",
                    "desg": "AAxAB",
                    "count": 2,
                    "size_1": this.l + (this.s1.size * 2 ),
                    "size_2": this.w,
                    "material": this.s1.material
                },
                "BN": {
                    "descp": "Каркас",
                    "detail": "Деталь B",
                    "desg": "BAxBB",
                    "count": 2,
                    "size_1": this.h,
                    "size_2": this.w,
                    "material": this.s1.material
                },
                "CN": {
                    "descp": "Крышка",
                    "detail": "Деталь C",
                    "desg": "CAxCB",
                    "count": 2,
                    "size_1": this.l + (this.s1.size * 2) - 1,
                    "size_2": this.h + (this.s1.size * 2) - 1,
                    "material": this.s1.material
                },
                "DN": {
                    "descp": "Уголок",
                    "detail": "Деталь D",
                    "desg": "DAxDB",
                    "count": (this.l > 1499) ? 10 : 8,
                    "size_1": this.w + (this.s2.size * 2 ),
                    "size_2": 70,
                    "material": this.s3.material
                },
                "EN": {
                    "descp": "Ручка",
                    "detail": "Деталь E",
                    "desg": "EAxEB",
                    "count": 2,
                    "size_1": 50,
                    "size_2": this.w + (this.s2.size * 2),
                    "material": this.s3.material
                },
                "FN": {
                    "descp": "Ручка",
                    "detail": "Деталь F",
                    "desg": "FAxFB",
                    "count": 2,
                    "size_1": 80,
                    "size_2": this.h + (this.s3.size * 2),
                    "material": this.s3.material
                }
            }
        });
    }

};
