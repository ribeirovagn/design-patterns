import Command from "./Command";
import Light from "./Light";

export default class TurnOnCommand implements Command {

    public constructor(readonly light: Light) { }

    execute(): void {
        this.light.turnOn();
    }

}