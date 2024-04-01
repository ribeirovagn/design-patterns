import Command from "./Command";
import Light from "./Light";

export default class TurnOffCommand implements Command {

    public constructor(readonly light: Light) { }

    execute(): void {
        this.light.turnOff();
    }

}