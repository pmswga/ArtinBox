
/*!
    Types of material
*/

var S1 = {
    PLYWOOD_6: 6,
    PLYWOOD_9: 9,
    PLYWOOD_12: 12,
}

var S2 = {
    PLYWOOD_15: 15,
    PLYWOOD_18: 18,
    PLYWOOD_21: 21,
    WOOD_20: 20,
    WOOD_30: 30,
}

var S3 = {
    PLYWOOD_15: 15,
    PLYWOOD_18: 18,
    PLYWOOD_21: 21,
}

class CalculatorForStandartBoxType
{
    constructor(L = 0, W = 0, H = 0)
    {
        this.l = L;
        this.w = W;
        this.h = H;

        this.s1 = 0;
        this.s2 = 0;
        this.s3 = 0;

        this.w0 = 0;
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

    getAN () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2);
    }

    getBN () {
        return this.h;
    }

    getCN () {
        return this.h + this.s3;
    }

    getDN () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2);
    }

    getEN () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2);
    }
    
    getFN () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2);
    }
    
    getO1N () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2);
    }

    getO2N () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2) - this.w0*2;
    }

    getO3N () {
        return this.l;
    }

    getO4N () {
        return this.l + (this.s1 * 2 ) + (this.s2 * 2) - this.w0*2;
    }
    
    getO5N () {
        return this.l + this.s2;
    }
    
    getO6N () {
        return this.w - this.w0*2;
    }

    getSizes () {
        return '{'
        + '"L": "' + this.l + '",'
        + '"W": "' + this.w + '",'
        + '"H": "' + this.h + '",'
        + '"S1": "' + this.s1 + '",'
        + '"S2": "' + this.s2 + '",'
        + '"S3": "' + this.s3 + '",'
        + '"AN": "' + this.getAN() + '",'
        + '"BN": "' + this.getBN() + '",'
        + '"CN": "' + this.getCN() + '",'
        + '"DN": "' + this.getDN() + '",'
        + '"EN": "' + this.getEN() + '",'
        + '"FN": "' + this.getFN() + '",'
        + '"O1N": "' + this.getO1N() + '",'
        + '"O2N": "' + this.getO2N() + '",'
        + '"O3N": "' + this.getO3N() + '",'
        + '"O4N": "' + this.getO4N() + '",'
        + '"O5N": "' + this.getO5N() + '",'
        + '"O6N": "' + this.getO6N() + '"'
        + '}';
    }

}
