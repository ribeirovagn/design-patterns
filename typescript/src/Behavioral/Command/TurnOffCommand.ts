import Command from "./Command";
import Light from "./Light";

/**
 * 
 * Concrete Command Class
 * 
 * Implementa a interface Command e associa-se a um Receiver (Receptor), 
 * invocando uma ou mais ações no Receiver.
 */
export default class TurnOffCommand implements Command {

    public constructor(readonly light: Light) { }

    execute(): void {
        this.light.turnOff();
    }

}