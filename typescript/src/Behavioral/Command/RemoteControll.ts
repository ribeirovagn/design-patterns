import Command from "./Command";

export default class RemoteControl {

    public constructor(readonly command: Command) { }

    public pressButton(): void {
        return this.command.execute()
    }
}