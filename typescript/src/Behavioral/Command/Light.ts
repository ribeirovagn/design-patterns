/**
 * 
 * Receiver class
 * Sabe como executar as operações associadas a uma solicitação. 
 * Qualquer classe pode servir como Receptor.
 */

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