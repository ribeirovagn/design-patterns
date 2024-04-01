export default class Light {

    private status: string = "";

    public turnOn(): void {
        this.status = " [*] Light ON";
    }

    public turnOff(): void {
        this.status = " [*] Light OFF";
    }

    public getStatus() {
        return this.status;
    }
}