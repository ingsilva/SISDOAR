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
public class RecebimentoSangue {
  private int idRecebimentoSangue;
  private String dataHora;
  private float quantidade;
  private String tipo;
  private String fatorRh;
  private String categoria;
  private Paciente paciente;

    /**
     * @return the idRecebimentoSangue
     */
    public int getIdRecebimentoSangue() {
        return idRecebimentoSangue;
    }

    /**
     * @param idRecebimentoSangue the idRecebimentoSangue to set
     */
    public void setIdRecebimentoSangue(int idRecebimentoSangue) {
        this.idRecebimentoSangue = idRecebimentoSangue;
    }

    /**
     * @return the dataHora
     */
    public String getDataHora() {
        return dataHora;
    }

    /**
     * @param dataHora the dataHora to set
     */
    public void setDataHora(String dataHora) {
        this.dataHora = dataHora;
    }

    /**
     * @return the quantidade
     */
    public float getQuantidade() {
        return quantidade;
    }

    /**
     * @param quantidade the quantidade to set
     */
    public void setQuantidade(float quantidade) {
        this.quantidade = quantidade;
    }

    /**
     * @return the paciente
     */
    public Paciente getPaciente() {
        return paciente;
    }

    /**
     * @param paciente the paciente to set
     */
    public void setPaciente(Paciente paciente) {
        this.paciente = paciente;
    }

    /**
     * @return the tipo
     */
    public String getTipo() {
        return tipo;
    }

    /**
     * @param tipo the tipo to set
     */
    public void setTipo(String tipo) {
        this.tipo = tipo;
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
     * @return the categoria
     */
    public String getCategoria() {
        return categoria;
    }

    /**
     * @param categoria the categoria to set
     */
    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }
  
   
    
}
