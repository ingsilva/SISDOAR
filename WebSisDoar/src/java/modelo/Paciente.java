/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

/**
 *
 * @author Ingryd Silva
 */
public class Paciente {

    private int idPaciente;
    private String Nome;
    private String DataNascimento;
    private String Cpf;
    private String Rg;
    private String Endereco;
    private int Numero;
    private String Bairro;
    private String Complemento;
    private String TipoSangue;
    private String fatorRh;
    private int Idade;
    private Cidade cidade;

    /**
     * @return the idPaciente
     */
    public int getIdPaciente() {
        return idPaciente;
    }

    /**
     * @param idPaciente the idPaciente to set
     */
    public void setIdPaciente(int idPaciente) {
        this.idPaciente = idPaciente;
    }

    /**
     * @return the Nome
     */
    public String getNome() {
        return Nome;
    }

    /**
     * @param Nome the Nome to set
     */
    public void setNome(String Nome) {
        this.Nome = Nome;
    }

    /**
     * @return the DataNascimento
     */
    public String getDataNascimento() {
        return DataNascimento;
    }

    /**
     * @param DataNascimento the DataNascimento to set
     */
    public void setDataNascimento(String DataNascimento) {
        this.DataNascimento = DataNascimento;
    }

    /**
     * @return the Cpf
     */
    public String getCpf() {
        return Cpf;
    }

    /**
     * @param Cpf the Cpf to set
     */
    public void setCpf(String Cpf) {
        this.Cpf = Cpf;
    }

    /**
     * @return the Rg
     */
    public String getRg() {
        return Rg;
    }

    /**
     * @param Rg the Rg to set
     */
    public void setRg(String Rg) {
        this.Rg = Rg;
    }

    /**
     * @return the Endereco
     */
    public String getEndereco() {
        return Endereco;
    }

    /**
     * @param Endereco the Endereco to set
     */
    public void setEndereco(String Endereco) {
        this.Endereco = Endereco;
    }

    /**
     * @return the Numero
     */
    public int getNumero() {
        return Numero;
    }

    /**
     * @param Numero the Numero to set
     */
    public void setNumero(int Numero) {
        this.Numero = Numero;
    }

    /**
     * @return the Bairro
     */
    public String getBairro() {
        return Bairro;
    }

    /**
     * @param Bairro the Bairro to set
     */
    public void setBairro(String Bairro) {
        this.Bairro = Bairro;
    }

    /**
     * @return the Complemento
     */
    public String getComplemento() {
        return Complemento;
    }

    /**
     * @param Complemento the Complemento to set
     */
    public void setComplemento(String Complemento) {
        this.Complemento = Complemento;
    }

    /**
     * @return the TipoSangue
     */
    public String getTipoSangue() {
        return TipoSangue;
    }

    /**
     * @param TipoSangue the TipoSangue to set
     */
    public void setTipoSangue(String TipoSangue) {
        this.TipoSangue = TipoSangue;
    }

    /**
     * @return the fatorRh
     */
    public String getFatorRh() {
        return fatorRh;
    }

    /**
     * @param fatorRh the fatorRh to set
     */
    public void setFatorRh(String fatorRh) {
        this.fatorRh = fatorRh;
    }

    /**
     * @return the cidade
     */
    public Cidade getCidade() {
        return cidade;
    }

    /**
     * @param cidade the cidade to set
     */
    public void setCidade(Cidade cidade) {
        this.cidade = cidade;
    }

    /**
     * @return the Idade
     */
    public int getIdade() {
        return Idade;
    }

    /**
     * @param Idade the Idade to set
     */
    public void setIdade(int Idade) {
        this.Idade = Idade;
    }

}
